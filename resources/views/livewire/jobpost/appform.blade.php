<?php

use App\Models\Job;
use App\Models\Applicant;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rules\File;
use GeminiAPI\Laravel\Facades\Gemini;
use Illuminate\Support\Facades\Storage;

new class extends Component {
    use WithFileUploads;

    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $gender;
    public $birth_date;
    public $contact;
    public $address;
    public $nationality;
    public $religion;
    public $civil_status;
    public $resume;
    public $referred_by;
    public $job_position;
    public $terms;
    public $title;
    public $requirements;
    public $result;

    public function submit()
    {
        $validatedData = $this->validate([
            'first_name' => ['required','string'],
            'middle_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'birth_date' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'address' => ['required', 'string'],
            'nationality' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'civil_status' => ['required', 'string'],
            'resume' => ['required', File::types(['pdf'])],
            'referred_by' => ['nullable'],
            'terms' => ['required'],
        ]);

        $pdf = $this->resume->store('resumes', 'public');
        $validatedData['resume'] = $pdf;
        
        $validatedData['job_position'] = $this->title;

        $parser = new \Smalot\PdfParser\Parser();
        $pdf = $parser->parseFile(public_path('storage/'.$pdf));
        $text = $pdf->getText();



        $requirements = $this->requirements;

        $res = "can you analyze this resume and check the skills that this resume has
              " .$text . " and analyze if the skills are fit and match with" . $requirements ." 
             and give me the percentage of the skills matches only the number of percentage. just give me a
              number of percentage of your calculation please and dont say any explanation I just need the number I dont need any explanation or label";

        $result = Gemini::geminiPro()->generateContent($res);

        $result2 = $result->text();

        $num = Str::remove('%',$result2);

        $this->result = $num;
        $validatedData['score'] = $num;

        if($num < 50){
            $applicant = Applicant::create($validatedData);
            
            $this->dispatch('success-notif');
        }else{
            $validatedData['status'] = 'candidate';
            $applicant = Applicant::create($validatedData);
            
            $this->dispatch('success-notif');
        }
        
    }

    public function setTrue()
    {
        $this->terms = false;
    }
    
}; ?>

<form class="bg-white flex-1 flex flex-col items-center gap-4 px-4 py-4 " wire:submit="submit" x-data="{terms: false}">
    <x-stable-notif on="success-notif" >
        <div class="bg-white w-80 lg:w-96  h-80 flex flex-col items-center justify-center gap-7 py-5 text-center rounded-md shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
            <div class=" text-3xl font-bold animate-pulse    w-36 h-36 rounded-full border-2 border-amber-500 flex justify-center items-center">
                {{ $result }}%
            </div>
            <div>You are {{ $result }} percent fit in this role. <br> Goodluck! :D</div>
            <x-button label="back" amber href="/"/>
        </div>
    </x-stable-notif>
    <div class="text-3xl">Hello! Please tell us about yourself </div>
    <div class="space-y-3">
        <div class="grid grid-cols-2 gap-3 items-center">
            <x-input label="Firstname" wire:model="first_name" errorless/>
            <x-input label="Lastname" wire:model="last_name" errorless/>
            <x-input label="Middelname" wire:model="middle_name" errorless/>
            <div class="flex items-center gap-4">
                <x-native-select
                    label="Gender"
                    wire:model="gender"
                    errorless
                    placeholder="Select"
                    :options="['Male', 'Female', 'Other']"
                    
                />
                <div class="w-20 lg:w-32">
                    <x-input label="Birthdate" wire:model="birth_date" errorless  type="date" />
                </div>
            </div>
        </div>
        <div>
            <x-input label="Address" wire:model="address" errorless/>
        </div>
        <div class="grid grid-cols-2 gap-3 items-center">
            <div class="flex gap-3">
                <x-input label="Religion" wire:model="religion" errorless/>
                <x-input label="Civil Status" wire:model="civil_status" errorless />
            </div>
            <x-input label="Email" wire:model="email" errorless/>
            <x-input label="Conctact no." wire:model="contact" errorless/>
            <x-input label="Nationality" wire:model="nationality" errorless/>
            <x-input type="file" label="Resume" wire:model="resume" errorless/>
            <x-input label="Referred by" wire:model="referred_by" errorless corner="Optional"/>
        </div>
        
    </div>
    <div class="min-w-full mt-3 flex justify-between items-center gap-10">
        <x-button type="submit" amber label="Submit" class="flex-1" />
        <button @click="terms = true">
            <x-checkbox label="Terms and Condition" wire:model.live="terms" errorless />
        </button>
        <div wire:loading wire:target="submit"> 
            <div class="px-5 absolute bg-black/10 w-full top-0 left-0 h-screen flex justify-center items-center">
                <div class="bg-white w-80 lg:w-96 h-52 flex justify-center items-center rounded-md shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                    <div class="text-3xl font-bold animate-pulse bg-gradient-to-r from-amber-300 to-amber-600 bg-clip-text text-transparent">Analyzing....</div>
                </div>
                
            </div>
        </div>
    </div>
    <div x-show="terms" x-cloak  class="px-5 absolute bg-black/20 w-full top-0 left-0 h-screen flex justify-center items-center">
        <div @click.away="terms = false" class="bg-white  flex flex-col justify-between max-w-lg">
            <div class="flex items-center gap-2 px-5 py-4 ">
                <x-icon name="clipboard-document-list" color="blue" class="w-12 h-12" />
                <div>
                    <div class="text-2xl">Terms and Conditions</div>
                    <p class="text-gray-500">smol details</p>
                </div>
            </div>
            <x-terms />
            <div class="px-5 py-4 flex items-center justify-between gap-7">
                <x-button @click="terms = false" light  label="Decline" class="w-full" wire:click="setTrue()"/>
                <x-button @click="terms = false" label="Accept" class="w-full"/>
            </div>
        </div>
    </div>
</form>

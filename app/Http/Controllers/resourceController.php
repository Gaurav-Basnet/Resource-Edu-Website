<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MockQuestion;
use Illuminate\Http\Request;

use App\Models\Resource;
use App\Models\Testimonial;
use App\Models\Team;
use User;

class resourceController extends Controller
{


    public function index()
    {
        $resources = Resource::latest()->get();
        $categories = Resource::select('category')->distinct()->pluck('category')->toArray();
        return view('Auth/resources', compact('resources','categories'));
    }

    public function ieltsacademic()
    {
        $resources = Resource::latest()->get();
        $ieltsAcademicListening = Resource::where('category', 'IELTS Academic')->where('section', 'Listening')->latest()->get();
        $ieltsAcademicWriting = Resource::where('category', 'IELTS Academic')->where('section', 'Writing')->latest()->get();
        $ieltsAcademicReading = Resource::where('category', 'IELTS Academic')->where('section', 'Reading')->latest()->get();
        $ieltsAcademicSpeaking = Resource::where('category', 'IELTS Academic')->where('section', 'Speaking')->latest()->get();


        return view('Auth/ieltsacademic', compact('ieltsAcademicListening', 'ieltsAcademicWriting', 'ieltsAcademicReading', 'ieltsAcademicSpeaking'));
    }

    public function ieltsgeneral()
    {
        $resources = Resource::latest()->get();
        $ieltsGeneralListening = Resource::where('category', 'IELTS General')->where('section', 'Listening')->latest()->get();
        $ieltsGeneralWriting = Resource::where('category', 'IELTS General')->where('section', 'Writing')->latest()->get();
        $ieltsGeneralReading = Resource::where('category', 'IELTS General')->where('section', 'Reading')->latest()->get();
        $ieltsGeneralSpeaking = Resource::where('category', 'IELTS General')->where('section', 'Speaking')->latest()->get();


        return view('Auth/ieltsgeneral', compact('ieltsGeneralListening', 'ieltsGeneralWriting', 'ieltsGeneralReading', 'ieltsGeneralSpeaking'));
    }
        public function ieltsukvi()
    {
        $resources = Resource::latest()->get();
        $ieltsUKVIListening = Resource::where('category', 'IELTS UKVI')->where('section', 'Listening')->latest()->get();
        $ieltsUKVIWriting = Resource::where('category', 'IELTS UKVI')->where('section', 'Writing')->latest()->get();
        $ieltsUKVIReading = Resource::where('category', 'IELTS UKVI')->where('section', 'Reading')->latest()->get();
        $ieltsUKVISpeaking = Resource::where('category', 'IELTS UKVI')->where('section', 'Speaking')->latest()->get();


        return view('Auth/ieltsukvi', compact('ieltsUKVIListening', 'ieltsUKVIWriting', 'ieltsUKVIReading', 'ieltsUKVISpeaking'));
    }

     public function ieltsa1a2()
    {
        $resources = Resource::latest()->get();
        $ieltsa1a2Listening = Resource::where('category', 'LifeSkill A1/B1')->where('section', 'Listening')->latest()->get();
        $ieltsa1a2Writing = Resource::where('category', 'LifeSkill A1/B1')->where('section', 'Writing')->latest()->get();
        $ieltsa1a2Reading = Resource::where('category', 'LifeSkill A1/B1')->where('section', 'Reading')->latest()->get();
        $ieltsa1a2Speaking = Resource::where('category', 'LifeSkill A1/B1')->where('section', 'Speaking')->latest()->get();


        return view('Auth/ieltsA1A2', compact('ieltsa1a2Listening', 'ieltsa1a2Writing', 'ieltsa1a2Reading', 'ieltsa1a2Speaking'));
    }
    
     public function general()
    {
        $resources = Resource::latest()->get();
        $general = Resource::where('category', 'General')->latest()->get();


        return view('Auth/general', compact('general', 'general'));
    }
    
     public function english()
    {
        $resources = Resource::latest()->get();
      
         $englishbasic = Resource::where('category', 'English')->where('section', 'Basic')->latest()->get();
        $englishinter = Resource::where('category', 'English')->where('section', 'Intermediate')->latest()->get();
        $englishadvanced = Resource::where('category', 'English')->where('section', 'Advanced')->latest()->get();

        return view('Auth/english', compact('englishbasic', 'englishinter', 'englishadvanced'));
    }


    public function gettesti()
    {
         $testimonials = Testimonial::all(); // Fetch all team members
         return view('welcome', compact('testimonials'));
    }

     public function gettestimonials()
    {
         $testimonials = Testimonial::all(); 
         
         $team = Team::all();// Fetch all team members
         return view('about', compact('testimonials','team'));
    }

    
    public function getforcontact()
    {
         $testimonials = Testimonial::latest()->get(); // Fetch all team members
         return view('contact', compact('testimonials'));
    }

      public function getfortest()
    {
      
         $questions = MockQuestion::latest()->get(); // Fetch all team members
         return view('Auth.test', compact('questions'));
    }


public function getacademic()
{
    $questions = MockQuestion::where('section', 'Ielts Academic')
                    ->inRandomOrder()
                    ->limit(10)
                    ->get();

    return view('Auth/mock1', compact('questions'));
}


}


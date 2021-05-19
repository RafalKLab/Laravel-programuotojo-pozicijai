<?php

namespace App\Http\Controllers;

use App\Models\Pardavimas;
use Illuminate\Http\Request;
use App\Models\Worker;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(){
        $workers = Worker::all()->pluck('full_name', 'id');
        $workers -> prepend('---Pasirinkite---',0);
        return view('welcome', compact('workers'));
    }

    public function store(Request $request){
        //validacija
        $this->validate($request, [
            'worker' => 'required|not_in:0',
            'speed' => 'required',
            'quality' => 'required',
            'recommendation' => 'required',
            'comments' => 'nullable',
        ],
        [
            'not_in' => 'Turite pasirinkti darbuotoja',
        ]);
        //Sutarties numerio sudarymas
        $sutarties_nr = uniqid();
        //Naujo įrašo sukurimas
        Pardavimas::create([
            'darbuotojo_id' => $request->input('worker'),
            'sutarties_nr' => $sutarties_nr,
            'rekomendacija' => $request->input('recommendation'),
            'greitis' => $request->input('speed'),
            'pastabos' => $request->input('comments'),
            'sutikimas' => $request->input('yes_no'),
        ]);
        //return redirect()->route('home')->with('success', 'Anketa buvo pateikta!');
        //return view('conclusion', compact('request'));
        return $this->show($request);
    }
    public function show(Request $request){
        $answers = $request->all();
        //surandame pilna darbuotojo varda ir pavarder pagal id
        $worker_full_name = Worker::findOrFail($answers['worker'])->full_name;
        $answers['worker'] = $worker_full_name;
        return view('conclusion', compact('answers'));
    }
}

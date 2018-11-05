<?php

/**
 * Home Controller
 */

namespace App\Http\Controllers;


use App\Models\Answer;
use App\Models\Categories;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{

    /**
     * Display Home View
     *
     * @view home
     * @link http://domain.com
     * @method GET
     */
    public function index()
    {
        $categories = Categories::get();
        return view('home/home', compact('categories'));

    }


    /**
     * Display Home View
     *
     * @view home
     * @link http://domain.com
     * @method Post
     */
    public function selectedTest(Request $request)
    {


        $name = $request->get('name');
        $category_id = $request->get('selected_category');
        if (!$name) {
            Session::flash('error_message', trans('frontend.home.name.missing'));
            return redirect()->back()->withInput();
        } elseif ($category_id === "0" || $category_id === 0) {
            Session::flash('error_message', trans('frontend.home.category.not.selected'));
            return redirect()->back()->withInput();
        }

        $questions = Question::whereCategoryId($category_id)->orderByRaw('RAND()')->limit(2)->get();//change limit for more questions
        $questions_ids = $questions->pluck('id_question');
        return view('pages/quiz/quiz', compact('questions', 'name', 'questions_ids'));
    }

    /**
     * Display Home View
     *
     * @view home
     * @link http://domain.com
     * @method Post
     */
    public function results(Request $request)
    {
        $percentage_correct=0;
        $correct_answers=0;
        $name = $request->get('name');
        $questions_ids = $request->get('questions_ids');
        $questions = Question::whereIn('id_question',json_decode($questions_ids))->get();

        foreach ($questions as $question) {
            $radio = $request->get('options' .$question->id_question);
            if (!$radio) {

                Session::flash('error_message', trans('frontend.quiz.options.not.selected'));
                return redirect()->back()->withInput();
            }
            foreach ($question->answers as $answer) {

                if($answer->correct ===1 && strval($answer->id_answer) === $radio){
                    $correct_answers++;
                }
            }
            $question->selected_answer=$radio;

        }
        $percentage_correct=($correct_answers/sizeof($questions))*100;

        return view('pages/quiz/results', compact('questions','name','percentage_correct'));
    }


}

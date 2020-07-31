<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class MyProfileController extends Controller
{
   public function create( )
	{
		return view("myprofile/create");
    }

    public function edit($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/edit" , compact('profile','others') );
    }

    public function show($id)
    {   
        $profile = (object)[
            "id" => $id,
            "name" => "James" ,
            "lastname" =>  "Mars",
            "email" => "james@vru.ac.th",
        ];
        $others = "hello world";
        return view("myprofile/show" , compact('profile','others') );
    }
    public function gallery()
    {
        $ant = url("images/ant.jpg");
        $bird = url("images/bird.jpg");
        $cat = url("images/cat.jpg");
        $god = url("images/god.jpg");
        $spider = url("images/spider.jpg");
        return view("test/index", compact("ant","bird","cat","god","spider"));
      
    }
    public function ant()
    {
    $ant = url("images/ant.jpg");
    return view("test/ant", compact("ant"));
    }
    public function bird()
    {
    $bird = url("images/bird.jpg");
    return view("test/bird", compact("bird"));
    }


 public function coronavirus(){
        $reports = [
            (object) ["country"=>"Thailand" , "date"=>"2020-04-19" , "total"=>"2765", "active"=>"790"  , "death"=>"47", "recovered"=>"1928"],
            (object) ["country"=>"China" , "date"=>"2020-04-18" , "total"=>"2733", "active"=>"899"  , "death"=>"47", "recovered"=>"1787"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-17" , "total"=>"2700", "active"=>"964"  , "death"=>"47", "recovered"=>"1689"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-16" , "total"=>"2672", "active"=>"1033" , "death"=>"46", "recovered"=>"1593"],
            (object) ["country"=>"Thailand" , "date"=>"2020-04-15" , "total"=>"2643", "active"=>"1103" , "death"=>"43", "recovered"=>"1497"],
        ];
        return view("myprofile/coronavirus", compact("reports") );
    }

}



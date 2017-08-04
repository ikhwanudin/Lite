<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shrt;

class ShrtController extends Controller
{
    public function shrt($shrt)
    {
    	$link = Shrt::where('shrt', $shrt)->firstOrFail();
    	$link = $link->link;
    	return redirect('http://' . $link);
    }
	public function store()
    {
        Shrt::create(request(['title', 'link', 'shrt' , 'description']));
        return redirect('/dashboard');
    }
}

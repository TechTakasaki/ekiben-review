<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;
use App\User;
use App\Review;

//beforeAction(Auth::check());

class ReviewsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**public function __construct()
    {
        parent::__construct();
        $this->beforeAction(\Auth::check());
    }*/
    
    public function index($id)
    {
    
        $user = User::find($id);
        $item = Item::find($id);
        $reviews = $user->reviews()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'reviews' => $reviews,
        ];
        
        return view('reviews.index', [
            'item' => $item,
            'reviews' => $reviews,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $item = Item::find($id);
        $review = new Review;
        

        return view('reviews.create', [
            'item' => $item,
            'review' => $review,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $item = Item::find($id);
        
        $review = new Review;
        $review->content = $request->content;
        $review->item_id = $item->id;
        $review->user_id = \Auth::user()->id;
        $review->save();
        
        /**$this->validate($request, [
            'content' => 'required|max:255',
        ]);
        
        $request->user()->reviews()->create([
            'content' => $request->content,
        ]);
        
        $request->item()->reviews()->create([
            'content' => $request->content,
        ]);**/

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();

        return redirect()->back();
    }
}

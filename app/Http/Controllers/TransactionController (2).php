<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    public function getTransaction()
    {
        $data = Transaction::all();
        return view('Transaction.index', compact('data'));
    }
    public function detailtransaksi($transaction)
    {
        $data = Transaction::find($transaction);
        return view('Transaction.detail', compact('data'));
    }

    public function form_submit_front()
    {
        $this->authorize('checkmember');
        return view('frontend.checkout');
    }

    public function submit_front()
    {
        $this->authorize('checkmember');

        $cart = session()->get('cart');
        $user = Auth::user();
        $t = new Transaction();
        $t->pembeli_id = $user->id;
        $t->transaction_date = Carbon::now()->toDateTimeString();
        $t->save();

        $totalharga = $t->insertProduct($cart, $user);
        $t->total = $totalharga;
        $t->save();

        session()->forget('cart');
        return redirect('home');
    }
}

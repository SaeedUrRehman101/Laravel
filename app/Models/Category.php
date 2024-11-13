<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = 'category_Id';
    use HasFactory;
}


//  Laravel mein data encapsulation aur access control ke liye protected, public, aur private keywords ko use kiya ja sakta hai, lekin $fillable aur $guarded properties ke liye Laravel mein mostly protected keyword prefer kiya jata hai.

// 1. protected
// Laravel mein protected ko $fillable aur $guarded properties ke sath use kiya jata hai. Iska matlab ye hai ke yeh properties sirf isi class aur iske child classes ke andar accessible hain.

// 2. public
// Agar aap public keyword use karte hain, to wo property kisi bhi jagah se accessible hoti hai, chahe wo class ke bahar hi kyun na ho. Lekin, ye Laravel mein recommended nahi hai, kyunki ye encapsulation aur security rules ko todta hai.

// 3. private
// private keyword sirf usi class ke andar use hota hai jis mein wo define kiya gaya hai. Yeh
<?php
namespace App\Observers;

use App\Notifications\NewItem;
use App\Model\Registrasi;
use App\User;

class ItemObserver
{
    public function created(Item $item)
    {
        $author = $Registrasi->user;
        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new NewItem($Registrasi,$author));
        }
    }
}

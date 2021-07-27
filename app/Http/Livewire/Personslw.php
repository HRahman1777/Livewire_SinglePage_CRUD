<?php

namespace App\Http\Livewire;

use App\Models\Persons;
use Livewire\Component;

class Personslw extends Component
{

    public $firstname;
    public $lastname;
    public $phone;
    public $email;

    public $ufirstname;
    public $ulastname;
    public $uphone;
    public $uemail;

    public $uid;

    public $checkedId = [];

    public function render()
    {
        return view('livewire.personslw', [
            'persons' => Persons::orderBy('id', 'asc')->get(),
        ]);
    }


    public function save()
    {
        //dd('hi');
        $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $save = Persons::insert([
            'fname' => $this->firstname,
            'lname' => $this->lastname,
            'phone' => $this->phone,
            'email' => $this->email,
        ]);
        if ($save) {
            //dd('done');
            $this->dispatchBrowserEvent('saveAlert');
        }
    }


    public function OpenModalEdit($id)
    {
        $this->uid = $id;
        //dd("Success");
        $pInfo = Persons::find($id);
        $this->ufirstname = $pInfo->fname;
        $this->ulastname = $pInfo->lname;
        $this->uphone = $pInfo->phone;
        $this->uemail = $pInfo->email;
        $this->dispatchBrowserEvent('EditModal', ['id' => $id]);
    }

    public function edit()
    {
        $uid = $this->uid;
        $this->validate([
            'ufirstname' => 'required',
            'ulastname' => 'required',
            'uphone' => 'required',
            'uemail' => 'required'
        ]);

        $edit = Persons::find($uid)->update([
            'fname' => $this->ufirstname,
            'lname' => $this->ulastname,
            'phone' => $this->uphone,
            'email' => $this->uemail,
        ]);


        if ($edit) {
            //dd('done');
            $this->dispatchBrowserEvent('editAlert');
        }
    }

    public function SingleDelete($did)
    {
        //= $this->uid;
        //dd($did);
        $del = Persons::find($did)->delete();

        if ($del) {
            $this->dispatchBrowserEvent('delAlert');
        }
    }

    public function delAllMarked()
    {
        $val = $this->checkedId;

        $del = Persons::wherekey($val)->delete();

        if ($del) {
            $this->dispatchBrowserEvent('delAlert');
            $this->checkedId = [];
        }
    }

    public function colorMark($cid)
    {
        return in_array($cid, $this->checkedId) ? 'bg-warning' : '';
    }
}

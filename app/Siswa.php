<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_belakang', 'nama_depan', 'jenis_kelamin', 'agama', 'alamat', 'avatar', 'user_id'];

    public function getAvatar()
    {
    	if(!$this->avatar){
    		return asset('images/default.jpg');
    	}

    	return asset('images/'.$this->avatar);
    }

    public function mapel()
    {
    	return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
    }

    public function test()
    {
        // ambil nilai2
        $total = 0;
        $hitung = 0;
        foreach($this->mapel as $mapel){
            $total += $total + $mapel->pivot->nilai;
            $hitung++;
        }

        return $total/$hitung;
    }
}

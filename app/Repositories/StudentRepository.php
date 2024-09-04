<?php

namespace App\Repositories;
use App\Interfaces\StudentRepositoryInterface;
use App\Models\Student;

class StudentRepository implements StudentRepositoryInterface
{
    public function getAll(){
        return Student::all();
    }

    public function getById($id){
        return Student::findOrFail($id);
    }

    public function store(array $data){
        return Student::create($data);
    }
    public function update($id, array $data){
        return Student::whereId($id)->update($data);
    }
    public function delete($id){
        return Student::destroy($id);
    }
}

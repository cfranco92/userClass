<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //attributes id, name , password, city, email, phone, photo
    protected $fillable = ['name', 'password', 'city', 'email', 'phone', 'photo'];

    // ID
    public function getId() {
        return $this->attributes['id'];
    }
    public function setId($id) {
        $this->attributes['id'] = $id;
    }
    
    // Name
    public function getName() {
        return $this->attributes['name'];
    }
    public function setName($name) {
        $this->attributes['name'] = $name;
    }
    
    // Password
    public function getPassword() {
        return $this->attributes['price'];
    }
    public function setPasssword($password) {
        $this->attributes['password'] = $password;
    }
    
    // City
    public function getCity() {
        return $this->attributes['city'];
    }
    public function setCity($city) {
        $this->attributes['city'] = $city;
    }

    // Email
    public function getEmail() {
        return $this->attributes['email'];
    }
    public function setEmail($email) {
        $this->attributes['email'] = $email;
    }

    // Phone
    public function getPhone() {
        return $this->attributes['phone'];
    }
    public function setPhone($phone) {
        $this->attributes['phone'] = $phone;
    }

    // Photo
    public function getPhoto() {
        return $this->attributes['photo'];
    }
    public function setPhoto($photo) {
        $this->attributes['photo'] = $photo;
    }
}

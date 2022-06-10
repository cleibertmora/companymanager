<x-input-text 
    label="Employee First Name" 
    id="first_name" 
    type="text" 
    placeholder="Type here..." 
    name="first_name"
    default="{{$employee ? $employee->first_name : null}}"/>

<x-input-text 
    label="Employee Last Name" 
    id="last_name" 
    type="text" 
    placeholder="Type here..." 
    name="last_name"
    default="{{$employee ? $employee->last_name : null}}"/>

<x-input-text 
    label="Employee Email" 
    id="email" 
    type="text" 
    placeholder="Type here..." 
    name="email"
    default="{{$employee ? $employee->email : null}}"/>

<x-input-text 
    label="Employee Phone" 
    id="phone" 
    type="text" 
    placeholder="Type here..." 
    name="phone"
    default="{{$employee ? $employee->phone : null}}"/>
<x-input-text 
    label="Company Name" 
    id="name" 
    type="text" 
    placeholder="Type here..." 
    name="name"
    default="{{$company ? $company->name : null}}"/>

<x-input-text 
    label="Company Email" 
    id="email" 
    type="email" 
    placeholder="Type here..." 
    name="email"
    default="{{$company ? $company->email : null}}"/>

<x-input-text 
    label="Company Website" 
    id="website" 
    type="website" 
    placeholder="Type here..." 
    name="website"
    default="{{$company ? $company->website : null}}"/>

<x-input-text 
    label="Company Address" 
    id="address" 
    type="address" 
    placeholder="Type here..." 
    name="address"
    default="{{$company ? $company->address : null}}"/>

<label for="">Company Logo</label>
<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" name="logo" id="logo">
    <label class="custom-file-label" name="logo" for="logo">Choose logo...</label>
</div>
@extends('layouts.form')

@section('page-title')
    Equipments Form
@endsection

@section('form-title')
    Equipments
@endsection

@section('form-content')

    <form action="{{route('equipments.store')}}" method="POST" class="fg-form">
        {{ csrf_field() }}

        <div class="fg-form-group">
            <input type="text" id="equipment_name" name="equipment_name" class="fg-form-control" required="required">
            <label for="equipment_name">Equipment Name <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="category" name="category" class="fg-form-control" required="required">
            <label for="category">Category <span class="required">*</span></label>
        </div>



        <div class="fg-form-group">
            <input type="text" id="price" name="price" class="fg-form-control" required="required">
            <label for="price">Price <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="on_hand" name="on_hand" class="fg-form-control" required="required">
            <label for="on_hand">On Hand <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <select id="durabitity" name="durability" class="fg-form-control">
                <option value="working">Working</option>
                <option value="broken">Broken</option>
                <option value="for repair">For Repair</option>
                <option value="needs replacement">Needs Replacement</option>
            </select>
            <label for="durability">Durability <span class="required">*</span></label>
        </div>

        <div class="fg-form-group">
            <input type="text" id="info" name="info" class="fg-form-control">
            <label for="info">Additional Information</label>
        </div>

        <button type="submit" class="btn btn-primary"><span>Add New</span></button>
        <button type="reset" class="btn btn-warning"><span>Clear</span></button>

    </form>

@endsection
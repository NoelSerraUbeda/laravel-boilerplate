@extends('admin.layout.crud')

@section('table')
    <div class="dataMenu-table">
        <div class="dataMenu-card">
            <div class="dataMenu-card-buttons">
                <button class="delete"><svg width="40px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <title>Delete</title>
                        <path
                            d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z"
                            fill="white" />
                    </svg></button>
                <button class="edit"><svg width="80px" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <title>Edit</title>
                        <path
                            d="M10 20H6V4H13V9H18V12.1L20 10.1V8L14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H10V20M20.2 13C20.3 13 20.5 13.1 20.6 13.2L21.9 14.5C22.1 14.7 22.1 15.1 21.9 15.3L20.9 16.3L18.8 14.2L19.8 13.2C19.9 13.1 20 13 20.2 13M20.2 16.9L14.1 23H12V20.9L18.1 14.8L20.2 16.9Z"
                            fill="white" />
                    </svg></button>
            </div>
            <div class="dataMenu-card-data">
                <h3>NOMBRE: <span>Pedro</span></h3>
                <h3>EMAIL: <span>PedroCorreo@gmail.com</span></h3>
            </div>
        </div>
    </div>
@endsection


@section('form')

<div class="dataMenu-form">
    <div class="dataMenu-form-writter">
        <form id="main">
            <div class="writter-section">
                <label>Name</label>
                <input type="text">
            </div>
            <div class="writter-section">
                <label>Email</label>
                <input type="email">
            </div>
            <div class="writter-section">
                <label>Password</label>
                <input type="password">
            </div>
            <div class="writter-section">
                <label>Repeat Password</label>
                <input type="password">
            </div>
        </form>
        <form id="image">
            <div class="gallery">
                
        </form>
    </div>
</div>
</div>
@endsection


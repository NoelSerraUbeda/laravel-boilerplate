@extends('admin.layout.crud')

@section('table')
    @component('admin.components.table-filter')
    @endcomponent
    <div class="crud-table">
        <div class="card-section">
            @isset($events)
                @foreach($events as $event_element)
                    <div class="crud-card">
                        <div class="crud-card-buttons">
                            <button class="edit edit-button" data-endpoint="{{route('events_edit', ['event' => $event_element->id])}}">
                                <svg  xmlns="http://www.w3.org/2000/svg"viewBox="0 0 24 24">
                                    <title>Edit</title>
                                    <path d="M10 20H6V4H13V9H18V12.1L20 10.1V8L14 2H6C4.9 2 4 2.9 4 4V20C4 21.1 4.9 22 6 22H10V20M20.2 13C20.3 13 20.5 13.1 20.6 13.2L21.9 14.5C22.1 14.7 22.1 15.1 21.9 15.3L20.9 16.3L18.8 14.2L19.8 13.2C19.9 13.1 20 13 20.2 13M20.2 16.9L14.1 23H12V20.9L18.1 14.8L20.2 16.9Z" fill="white" />
                                </svg>
                            </button>
                            <button class="delete destroy-button" data-endpoint="{{route('events_destroy', ['event' => $event_element->id])}}">
                                <svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"> 
                                    <title>Delete</title>
                                    <path d="M13.46,12L19,17.54V19H17.54L12,13.46L6.46,19H5V17.54L10.54,12L5,6.46V5H6.46L12,10.54L17.54,5H19V6.46L13.46,12Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                        <div class="crud-card-data">
                            <h3>Nombre: <span>{{$event_element->name}}</span></h3>
                            <h3>Poblacion: <span>{{$event_element->town_id}}</span></h3>
                            <h3>Dirección: <span>C/{{$event_element->address}}</span></h3>
                            <h3>Precio: <span>{{$event_element->price}} €</span></h3>
                            <h3>Fecha de inicio: <span>{{$event_element->start_date}}</span></h3>
                            <h3>Creado el: <span>{{$event_element->created_at}}</span></h3>
                            <h3>Actualizado el: <span>{{$event_element->updated_at}}</span></h3>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </div>

    <div class="crud-pages">
        <ul>
            <li class="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>arrow-left-bold-box</title><path d="M21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3H19A2,2 0 0,1 21,5M7,12L12,17V14H16V10H12V7L7,12Z" /></svg></li>
            <li class="actual-page">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>...</li>
            <li>20</li>
            <li class="next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>arrow-right-bold-box</title><path d="M3,19V5A2,2 0 0,1 5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19M17,12L12,7V10H8V14H12V17L17,12Z" /></svg></li>
        </ul>
        <p>0{{__('admin/pagination.total')}}</p>
    </div>    
    @endsection


@section('form')

    <div class="crud-form-buttons">
        <div class="crud-form-windows tabs">
            <ul>
                <li id="main-option" class="tab selected" data-tab="general">Principal</li>
                <li id="image-option" class="tab" data-tab="images">Imágenes</li>
            </ul>
        </div>
        <div class="button-panel">
            <div class="save">
                <button class="store-button" data-endpoint="{{route('events_store')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <title>Save-Data</title>
                        <path fill="white" d="M11.1 19C11.2 19.7 11.4 20.4 11.7 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H17L21 7V11.7C20.4 11.4 19.7 11.2 19 11.1V7.8L16.2 5H5V19H11.1M12 12C10.3 12 9 13.3 9 15C9 16.3 9.8 17.4 11 17.8C11.1 15.6 12.1 13.7 13.7 12.5C13.2 12.2 12.6 12 12 12M15 10V6H6V10H15M22.8 19.6L21.8 21.3C21.7 21.4 21.6 21.4 21.5 21.4L20.3 21C20 21.2 19.8 21.3 19.5 21.5L19.3 22.8C19.3 22.9 19.2 23 19.1 23H17.1C17 23 16.9 22.9 16.8 22.8L16.6 21.5C16.3 21.4 16 21.2 15.8 21L14.6 21.5C14.5 21.5 14.4 21.5 14.3 21.4L13.3 19.7C13.2 19.6 13.3 19.5 13.4 19.4L14.5 18.6V17.6L13.4 16.8C13.3 16.7 13.3 16.6 13.3 16.5L14.3 14.8C14.4 14.7 14.5 14.7 14.6 14.7L15.8 15.2C16.1 15 16.3 14.9 16.6 14.7L16.8 13.4C16.8 13.3 16.9 13.2 17.1 13.2H19.1C19.2 13.2 19.3 13.3 19.3 13.4L19.5 14.7C19.8 14.8 20.1 15 20.4 15.2L21.6 14.7C21.7 14.7 21.9 14.7 21.9 14.8L22.9 16.5C23 16.6 22.9 16.7 22.8 16.8L21.7 17.6V18.6L22.8 19.4C22.9 19.4 22.9 19.5 22.8 19.6M19.5 18C19.5 17.2 18.8 16.5 18 16.5S16.5 17.2 16.5 18 17.2 19.5 18 19.5C18.8 19.5 19.5 18.8 19.5 18Z" />
                    </svg>
                </button>
            </div>
            <div class="erase" >
                <button class="create-button" data-endpoint="{{route('events_create')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <title>Delete-Data</title>
                        <path fill="white" d="M16.24,3.56L21.19,8.5C21.97,9.29 21.97,10.55 21.19,11.34L12,20.53C10.44,22.09 7.91,22.09 6.34,20.53L2.81,17C2.03,16.21 2.03,14.95 2.81,14.16L13.41,3.56C14.2,2.78 15.46,2.78 16.24,3.56M4.22,15.58L7.76,19.11C8.54,19.9 9.8,19.9 10.59,19.11L14.12,15.58L9.17,10.63L4.22,15.58Z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="crud-form-area">
        <form>
            <div class="tab-content event-form active" data-tab="general">
                <input name="id" type="hidden" value="{{$event->id ?? ''}}">
                <div class="area-section">
                    <label>Name</label>
                    <input id="name" name="name" type="text" autocomplete="name" value="{{$event->name ?? ''}}">
                </div><br>
                <div class="area-section">
                    <label>Poblacion</label>
                    <select id="town_id" name="town_id">
                        <option value="" disabled selected></option>
                        @foreach($towns as $town)
                            <option value="{{$town->id}}" {{ $town->id == $event->town_id ? 'selected' : ''}}>{{$town->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="area-section">
                    <label>Address</label>
                    <input id="address" name="address" type="text" autocomplete="name" value="{{$event->address ?? ''}}">
                </div>
                <div class="area-section">
                    <label>Price</label>
                    <input id="price" name="price" type="text" autocomplete="name" value="{{$event->price ?? '0'}}">
                </div>
                <div class="area-section">
                    <label>Start Date</label>
                    <input id="start_date" name="start_date" type="date" autocomplete="name" value="{{$event->start_date ?? ''}}">
                </div>
                <div class="area-section">
                    <label>End Date</label>
                    <input id="end_date" name="end_date" type="date" autocomplete="name" value="{{$event->end_date ?? ''}}">
                </div>
                <div class="area-section">
                    <label>Start Time</label>
                    <input id="start_date" name="start_time" type="time" autocomplete="name" value="{{$event->start_time ?? ''}}">
                </div>
                <div class="area-section">
                    <label>End Time</label>
                    <input id="end_date" name="end_time" type="time" autocomplete="name" value="{{$event->end_time ?? ''}}">
                </div>
                <div class="language-tabs">
                    <ul class="tabs">
                        <li id="main-option" class="tab selected" data-tab="es">ES</li>
                        <li id="image-option" class="tab" data-tab="en">EN</li>
                    </ul>
                </div>
                <div class="area active" data-tab="es">
                    <div class="area-section">
                        <label>Name</label>
                        <input type="text" class="long">
                    </div>
                    <div class="area-section ">
                        <label>Description</label>
                        <textarea></textarea>
                    </div>
                </div>
                <div class="area" data-tab="en">
                    <div class="area-section">
                        <label>Name</label>
                        <input type="text" class="long">
                    </div>
                    <div class="area-section">
                        <label>Description</label>
                        <textarea></textarea>
                    </div>
                </div>
            </div>
            <div class="tab-content custom-file-input" data-tab="images">
                <div class="form-section">
                    <label for="avatar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>file-document-plus</title><path d="M14 2H6C4.89 2 4 2.89 4 4V20C4 21.11 4.89 22 6 22H13.81C13.28 21.09 13 20.05 13 19C13 18.67 13.03 18.33 13.08 18H6V16H13.81C14.27 15.2 14.91 14.5 15.68 14H6V12H18V13.08C18.33 13.03 18.67 13 19 13S19.67 13.03 20 13.08V8L14 2M13 9V3.5L18.5 9H13M18 15V18H15V20H18V23H20V20H23V18H20V15H18Z" /></svg></label>
                    <input id="avatar" type="file" accept="image">
                </div>
            </div>
        </form>
    </div>

@endsection


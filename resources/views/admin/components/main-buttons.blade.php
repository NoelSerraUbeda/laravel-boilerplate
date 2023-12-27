<div class="crud-form-buttons">
    <div class="crud-form-windows">
        <ul>
            <li id="main-option" class="selected" onclick="principalActive()">Principal</li>
            <li id="image-option" onclick="imageActive()">Imágenes</li>
        </ul>
    </div>
    <div class="button-panel">
        <div class="save">
            <button class="store-button" data-endpoints="{{route('users_store')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>Save-Data</title>
                    <path fill="white" d="M11.1 19C11.2 19.7 11.4 20.4 11.7 21H5C3.9 21 3 20.1 3 19V5C3 3.9 3.9 3 5 3H17L21 7V11.7C20.4 11.4 19.7 11.2 19 11.1V7.8L16.2 5H5V19H11.1M12 12C10.3 12 9 13.3 9 15C9 16.3 9.8 17.4 11 17.8C11.1 15.6 12.1 13.7 13.7 12.5C13.2 12.2 12.6 12 12 12M15 10V6H6V10H15M22.8 19.6L21.8 21.3C21.7 21.4 21.6 21.4 21.5 21.4L20.3 21C20 21.2 19.8 21.3 19.5 21.5L19.3 22.8C19.3 22.9 19.2 23 19.1 23H17.1C17 23 16.9 22.9 16.8 22.8L16.6 21.5C16.3 21.4 16 21.2 15.8 21L14.6 21.5C14.5 21.5 14.4 21.5 14.3 21.4L13.3 19.7C13.2 19.6 13.3 19.5 13.4 19.4L14.5 18.6V17.6L13.4 16.8C13.3 16.7 13.3 16.6 13.3 16.5L14.3 14.8C14.4 14.7 14.5 14.7 14.6 14.7L15.8 15.2C16.1 15 16.3 14.9 16.6 14.7L16.8 13.4C16.8 13.3 16.9 13.2 17.1 13.2H19.1C19.2 13.2 19.3 13.3 19.3 13.4L19.5 14.7C19.8 14.8 20.1 15 20.4 15.2L21.6 14.7C21.7 14.7 21.9 14.7 21.9 14.8L22.9 16.5C23 16.6 22.9 16.7 22.8 16.8L21.7 17.6V18.6L22.8 19.4C22.9 19.4 22.9 19.5 22.8 19.6M19.5 18C19.5 17.2 18.8 16.5 18 16.5S16.5 17.2 16.5 18 17.2 19.5 18 19.5C18.8 19.5 19.5 18.8 19.5 18Z" />
                </svg>
            </button>
        </div>
        <div class="erase" >
            <button class="create-button" data-endpoints="{{route('users_create')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <title>Delete-Data</title>
                    <path fill="white" d="M16.24,3.56L21.19,8.5C21.97,9.29 21.97,10.55 21.19,11.34L12,20.53C10.44,22.09 7.91,22.09 6.34,20.53L2.81,17C2.03,16.21 2.03,14.95 2.81,14.16L13.41,3.56C14.2,2.78 15.46,2.78 16.24,3.56M4.22,15.58L7.76,19.11C8.54,19.9 9.8,19.9 10.59,19.11L14.12,15.58L9.17,10.63L4.22,15.58Z" />
                </svg>
            </button>
        </div>
    </div>
</div>
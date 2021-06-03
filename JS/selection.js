let params = new URLSearchParams(window.location.search);
let service = params.get( "service" );

document.getElementById('service').selectedIndex = service;
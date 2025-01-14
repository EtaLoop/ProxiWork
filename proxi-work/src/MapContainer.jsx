import React, { useEffect, useRef, useState } from 'react';

// Option A: Hardcode your API key here (not recommended in production)
const GOOGLE_MAPS_API_KEY = 'AIzaSyCuRA36AzIS5o-83Qx1V6Rc90NXsZRwU4o';

// Option B: Use an environment variable for security (.env file with REACT_APP_GOOGLE_MAPS_KEY=xxx)
// Then read it: process.env.REACT_APP_GOOGLE_MAPS_KEY
// Make sure to restart `npm start` after changing .env
const apiKey = process.env.REACT_APP_GOOGLE_MAPS_KEY || GOOGLE_MAPS_API_KEY;

function loadScript(url) {
  const existingScript = document.getElementById('googleMaps');
  if (!existingScript) {
    const script = document.createElement('script');
    script.src = url;
    script.id = 'googleMaps';
    document.body.appendChild(script);
    return script;
  }
  return existingScript;
}



const MapContainer = () => {
  const googleMapRef = useRef(null); // For referencing the map container <div>
  const [map, setMap] = useState(null);
  const [markers, setMarkers] = useState([]);

  // 1) Load the Google Maps script once
  useEffect(() => {
    const script = loadScript(
      `https://maps.googleapis.com/maps/api/js?key=${apiKey}&libraries=places`
    );
    script.addEventListener('load', onScriptLoad);
    return () => {
      script.removeEventListener('load', onScriptLoad);
    };
  }, []);

  // 2) Initialize the map
  const onScriptLoad = () => {
    // The ref holds the <div> in which we'll inject our Google Map
    const googleMap = new window.google.maps.Map(googleMapRef.current, {
      center: { lat: 40.7128, lng: -74.006 },
      zoom: 10,
    });
    setMap(googleMap);

    // Optionally, add a click listener to the map to add markers
    googleMap.addListener('click', (e) => {
      const newMarker = new window.google.maps.Marker({
        position: e.latLng,
        map: googleMap,
      });

      newMarker.addListener('click', () => {
        console.log('Marker clicked!');
        // or alert('Marker clicked!')
      });
      // Update the state to keep track of all markers
      setMarkers((prev) => [...prev, newMarker]);
    });
  };

  

  // 3) Render the map container
  return (
    <div style={{ width: '100%', height: '94vh' }} class="nav">
      <div 
        ref={googleMapRef}
        style={{ width: '100%', height: '100%' }}
      />
    </div>
  );
};

export default MapContainer;

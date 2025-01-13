// src/Marker.js
import { useEffect } from 'react';

const Marker = ({ map, position }) => {
  useEffect(() => {
    if (!map) return;

    // Create the marker
    const marker = new window.google.maps.Marker({
      position,
      map,
    });

    // Cleanup on unmount
    return () => {
      marker.setMap(null);
    };
  }, [map, position]);

  return null; // This component doesn't render anything in the DOM. It's purely for logic.
};

export default Marker;

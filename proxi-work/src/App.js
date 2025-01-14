import React from 'react';
import MapContainer from './MapContainer';
import Header from './Header'
import Footer from './Footer'

function App() {
  return (
    <div className="App">
      <Header />
      <div class="body-container">
        <div id="map-container" >
          <MapContainer />
        </div>
        <div class="post-container">
          <div class="post"> Annonce </div>
          <div class="post pair"> Annonce </div>
          <div class="post"> Annonce </div>
          <div class="post pair"> Annonce </div>
          <div class="post"> Annonce </div>
          <div class="post pair"> Annonce </div>
          <div class="post"> Annonce </div>
          <div class="post pair"> Annonce </div>
          <div class="post"> Annonce </div>
          <div class="post pair"> Annonce </div>
          <div class="post"> Annonce </div>
          <div class="post pair"> Annonce </div>
          <Footer/>
        </div>
      </div>
    </div>
  );
}

export default App;

import React from 'react';

function Header() {
  return (
    <header className="App-header">
      <div class="logo child-header"> LOGO </div>
      <input class="search-container child-header" type="input" placeholder='Rechercher une offre' />
      <button class="create-annonce child-header">Créer votre propre annonce !</button>
      <div class="compte-container">compte</div>
    </header>
  );
}




export default Header;

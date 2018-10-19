import React, { Component } from 'react';
import {NavLink} from 'react-router-dom';

class Nav extends Component {
  render() {
    return(
      <nav>
        <NavLink to="/">Home</NavLink>
        <NavLink to="/blog">Blog</NavLink>
      </nav>
    );
  }
}

export default Nav;
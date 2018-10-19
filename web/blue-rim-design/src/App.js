import React, { Component } from 'react';
import {BrowserRouter, Switch, Route} from 'react-router-dom';

import Home from './components/views/home/home_view';
import Blog from './components/views/blog/blog_view';

class App extends Component {
  render() {
    return (
      <BrowserRouter>
        <div className="app__container">
          <Switch>

            <Route  
              exact={true}
              path="/"
              component={Home} />

            <Route  
              exact={true}
              path="/blog"
              component={Blog} />

          </Switch>
        </div>
      </BrowserRouter>
    );
  }
}

export default App;

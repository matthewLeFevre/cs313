import React, { Component } from 'react';

import MultiPostSearch from './multi-post-search/multi-post-search__comp';
import Post from './post/post_comp';

class MultiPost extends Component {
  render(){
    return(
      <div>
        <MultiPostSearch />
        <div>
          <Post />
        </div>
      </div>
    );
  }
}

export default MultiPost;
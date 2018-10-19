import React, { Component } from 'react';

import MultiPost from '../../reusable/multi-post/multi-post_comp';
import Globals from '../../../services/global_service';

const Global = new Globals();

class Blog extends Component {
  constructor(props){
    super(props);
    this.createArticle = this.createArticle.bind(this);
  }

  createArticle () {
    let data = {
      'articleTitle': Global.makeWord(12),
      'articleSummary': Global.makeSentence(20),
      'articleBody': Global.makeParagraph(6),
      'articleStatus': 'published',
      'userId': 1
    }
    let req = Global.createRequestBody('article', 'createArticle', data);
    fetch(Global.url, req)
    .then(res => res.json())
    .then(res => {
      console.log(res);
    })
  }
  
  render() {
    return(
      <div className="view--blog grid--limited-padded ">
        <section className="view--blog__seciton col--12 col--sml--8 bg-blue">
          <MultiPost />
        </section>
        <aside className="col--12 col--sml--4 bg-yellow">
          <h1>Blog</h1>
          <form>
            <fieldset class="form__field">
              <button type="button" onClick={this.createArticle} class="btn mid primary">Create Article</button>
            </fieldset>
          </form>
        </aside>
      </div>
    );
  }
}

export default Blog;
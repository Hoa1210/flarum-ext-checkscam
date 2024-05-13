import IndexPage from 'flarum/forum/components/IndexPage';
import CustomDiscussionList from './CustomDiscussionList';
import Component from 'flarum/common/Component';
export default class ListScamer extends Component {
  oninit(vnode) {
    super.oninit(vnode);
    this.count = 0;
  }

  view() {
    return (
      <div>
        Count: {this.count}
        <button onclick={(e) => this.count++}>Cộng</button>
      </div>
    );
  }

  oncreate(vnode) {
    super.oncreate(vnode);

    // We aren't actually doing anything here, but this would
    // be a good place to attach event handlers, initialize libraries
    // like sortable, or make other DOM modifications.
    // $element = this.$();
    // $button = this.$('button');
  }
}

import app from 'flarum/forum/app';
import { extend } from 'flarum/common/extend';
import IndexPage from 'flarum/forum/components/IndexPage';
import ScammerModal from './components/ScammerModal';
import Button from 'flarum/components/Button';
import Scammer from './models/Scammer';

app.initializers.add('hoa1210/flarum-ext-checkscam', () => {

  // app.store.models.scammers = Scammer;
  

  // extend(IndexPage.prototype, 'sidebarItems', function (items) {
  //   items.add(
  //     'newDiscussion',
  //     Button.component(
  //       {
  //         className: 'Button Button--primary IndexPage-newDiscussion',
  //         onclick: () => {
  //           // Add your custom functionality here
  //           app.modal.show(ScammerModal);
  //         },
  //       }, [app.translator.trans('flarum-ext-checkscam.forum.controls.new')]
  //     )
  //   );
  // });
});
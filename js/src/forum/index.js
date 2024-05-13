import app from 'flarum/forum/app';
import { extend } from 'flarum/common/extend';
import IndexPage from 'flarum/forum/components/IndexPage';
import LinkButton from 'flarum/common/components/LinkButton';
import ListScamer from "./pages/ListScamer";
import Extend from 'flarum/common/extenders';
import DiscussionPage from 'flarum/forum/components/DiscussionPage';

app.initializers.add('hoa1210/flarum-ext-checkscam', () => {
  console.log('[hoa1210/flarum-ext-checkscam] Hello, forum!');

  app.routes['user.check-scam'] = {
    path: '/check-scam',
    component: ListScamer
  };

  // new Extend.Routes()
  // .add('acme.user', '/user/:id', <UsersPage />)

  extend(IndexPage.prototype, 'navItems', function (items) {
    console.log(items);
    items.add(
      'checkscam',
      LinkButton.component(
        {
          href: app.route('user.check-scam'),
          icon: 'fas fa-chart-line',
        },
        [app.translator.trans('hoa1210-checkscam.forum.checkscam')]
      )
    );
  });
  // extend(IndexPage.prototype, ['navItems', 'oncreate'], () => { 

  //   DiscussionPage.prototype.view = function() {
  //     return <p>Hello World1</p>;
  //   }
  // })

});

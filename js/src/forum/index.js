import app from 'flarum/forum/app';
import { extend } from 'flarum/common/extend';
import IndexPage from 'flarum/forum/components/IndexPage';

app.initializers.add('hoa1210/flarum-ext-checkscam', () => {
  console.log('[hoa1210/flarum-ext-checkscam123] Hello, forum!');

  extend(IndexPage.prototype, 'navItems', function (items) {
    items.add(
      'checkscams',
      <LinkButton icon="fas fa-th-large" href={app.route('tags')}>
        {app.translator.trans('flarum-tags.forum.index.tags_link')}
      </LinkButton>,
      -10
    );
  });
});

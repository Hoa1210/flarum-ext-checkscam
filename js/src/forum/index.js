import app from 'flarum/forum/app';
import { extend } from 'flarum/common/extend';
import HeaderSecondary from 'flarum/forum/components/HeaderSecondary';

app.initializers.add('hoa1210/flarum-ext-checkscam', () => {
  console.log('[hoa1210/flarum-ext-checkscam123] Hello, forum!');
  // extend(HeaderSecondary.prototype, 'items', function(items) {
  //   items.add('checkscam', <a href="https://google.com">Check Scam</a>);
  // });
});

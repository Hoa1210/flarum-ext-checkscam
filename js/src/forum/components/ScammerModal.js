import Modal from 'flarum/components/Modal';
import app from 'flarum/app';
import Button from 'flarum/components/Button';

export default class ScammerModal extends Modal{

    oninit(vnode){
        super.oninit(vnode);
        this.scammerName = '';
    }

    title(){
        return [app.translator.trans('flarum-ext-checkscam.forum.modal.title')];
    }

    content(){
        return m('.Modal-body', [
            m('.Form-group', [
                m('input.FormControl', {
                    value: this.scammerName,
                    onchange: event => {
                        this.scammerName = event.target.value;
                    },
                }),
            ]),
            m('.Form-group', [
                Button.component({
                    type: 'submit',
                    className: 'Button Button--primary Button--block'
                }, [app.translator.trans('flarum-ext-checkscam.forum.modal.submit')])
            ]),
        ]);
    }

    onsubmit(event){
        event.preventDefault();

        app.store.createRecord('scammers').save({
            scammerName: this.scammerName,

        }).then(() => {
            app.modal.close();
        }).catch(error => {
            console.log(error);
            m.redraw();

            throw error;
        });
    }

    className(){
        // super.className();
    }
}
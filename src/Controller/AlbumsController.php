<?php
// src/Controller/AlbumsController.php

namespace App\Controller;

use Cake\View\JsonView;

class AlbumsController extends AppController
{
    public function viewClasses(): array
    {
        return [JsonView::class];
    }

    public function index()
    {
        $order = isset($_GET["album_title"]) ? $_GET["album_title"] : "asc";
        $this->paginate = [
            'Albums' => [
                'order' => ['album_title' => $order],
            ],
        ];
        $albums = $this->paginate($this->Albums);
        $this->set(compact('albums'));
    }

    public function create() {
        $album = $this->Albums->newEmptyEntity();
        if ($this->request->is('post')) {
            $album = $this->Albums->patchEntity($album, $this->request->getData());
        
            if ($this->Albums->save($album)) {
                $this->Flash->success(__('Album saved successfully'));
                return $this->redirect(['action'=> 'index']);
            }

            $this->Flash->error(__('Bad save error'));
        }
        $this->set('album', $album);
    }

    public function read($album_id){
        $album = $album = $this->Albums->findAllByAlbumId($album_id)->firstOrFail();

        $this->set(compact('album'));
    }

    public function update($album_id) {
        $album = $this->Albums->findAllByAlbumId($album_id)->firstOrFail();

        if ($this->request->is(['post', 'put'])) {
            $this
                ->Albums
                ->patchEntity($album, $this->request->getData());

            if ($this->Albums->save($album)) {
                $this->Flash->success(__('Your album has been updated.'));
    
                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('Unable to update your album.'));
        }
    
        $this->set('album', $album);
    }

    public function delete($album_id) {
        $this->request->allowMethod(['post', 'delete']);
        $album = $this->Albums->findAllByAlbumId($album_id)->firstOrFail();

        if ($this->Albums->delete($album)) { 
            $this->Flash->success(__('{0} has been deleted.', $album->album_title));

            return $this->redirect(['action' => 'index']);     
        }
    }
}

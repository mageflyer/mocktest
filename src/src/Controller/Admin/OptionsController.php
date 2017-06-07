<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Options Controller
 *
 * @property \App\Model\Table\OptionsTable $Options
 *
 * @method \App\Model\Entity\Option[] paginate($object = null, array $settings = [])
 */
class OptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index($q_id=null)
    {
		$q_id	= $this->request->query('q_id');
		if($q_id)
		{
			$customFinderOptions = [ 'q_id' => $q_id ];
			$this->paginate = [	'finder' => [
												'ownedBy' => $customFinderOptions
											],
								'contain' => ['Courses', 'Questions']
							];
		}
        

		
        $options = $this->paginate($this->Options);

        $this->set(compact('options'));
        $this->set('_serialize', ['options']);
    }

    /**
     * View method
     *
     * @param string|null $id Option id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $option = $this->Options->get($id, [
            'contain' => ['Options', 'Qs', 'Cs']
        ]);

        $this->set('option', $option);
        $this->set('_serialize', ['option']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $option = $this->Options->newEntity();
		if ($this->request->is('post')) 
		{
			$postData	=	$this->request->getData();
			for($i=0;isset($postData['description'][$i]);$i++)
			{
				$data[$i]['c_id']		=	$postData['c_id'];
				$data[$i]['description']=	$postData['description'][$i];
				$data[$i]['q_id']		=	$postData['q_id'];
				$data[$i]['status']		=	'1';
			}
            $option = $this->Options->newEntities($data);
			if ($this->Options->saveMany($option)) 
			{
				$this->Flash->success(__('The option has been saved.'));
				return $this->redirect(['controller'=>'questions','action' => 'index']);
			}
			$this->Flash->error(__('The option could not be saved. Please, try again.'));
        }
        $qs = $this->Options->Questions->find('list', ['limit' => 200]);
        $cs = $this->Options->Courses->find('list', ['limit' => 200]);
        $this->set(compact('option', 'qs', 'cs'));
        $this->set('_serialize', ['option']);
    }
	
	public function correct($q_id=null)
    {
		$q_id	= $this->request->query('q_id');
		$this->loadModel('Questions');
		$qs = $this->Questions->get($q_id,array( 'contain' => ['Options']
        ));
        
		if ($this->request->is('put')) 
		{
			$postData	=	$this->request->getData();
			$correct_option_id	=	array_keys($postData['answer'], 1);
			$qs['correct_option_id'] = implode(',',$correct_option_id);
			
			//pr($data);die;
			if ($this->Questions->save($qs)) 
			{
				$this->Flash->success(__('The answer has been saved.'));
				return $this->redirect(['controller'=>'questions','action' => 'index']);
			}
			$this->Flash->error(__('The option could not be saved. Please, try again.'));
        }
		
		$qs = $this->Questions->get($q_id,array( 'contain' => ['Options']
        ));
       $this->set(compact('qs'));
       
        
    }
    /**
     * Edit method
     *
     * @param string|null $id Option id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $option = $this->Options->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $option = $this->Options->patchEntity($option, $this->request->getData());
            if ($this->Options->save($option)) {
                $this->Flash->success(__('The option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The option could not be saved. Please, try again.'));
        }
        $options = $this->Options->Options->find('list', ['limit' => 200]);
        $qs = $this->Options->Qs->find('list', ['limit' => 200]);
        $cs = $this->Options->Cs->find('list', ['limit' => 200]);
        $this->set(compact('option', 'options', 'qs', 'cs'));
        $this->set('_serialize', ['option']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Option id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $option = $this->Options->get($id);
        if ($this->Options->delete($option)) {
            $this->Flash->success(__('The option has been deleted.'));
        } else {
            $this->Flash->error(__('The option could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}

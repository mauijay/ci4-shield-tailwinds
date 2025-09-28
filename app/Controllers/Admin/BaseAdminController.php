<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseAdminController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    //protected $session;
    protected $navData; //Property to store nav() data

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger): void
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        //$this->session = service('session');
        $this->navData = $this->nav();
    }

    private function nav(): array
    {
        $user_id = auth()->id();
        $data = [];

        // Handle MessageModel safely
        try {
            $messageModel = model('MessageModel');
            if (method_exists($messageModel, 'unreadMessagesByRecipient')) {
                $data['unreadMessages'] = $messageModel->unreadMessagesByRecipient($user_id) ?: [];
            } else {
                $data['unreadMessages'] = [];
            }
        } catch (\Exception $e) {
            log_message('error', 'MessageModel error: ' . $e->getMessage());
            $data['unreadMessages'] = [];
        }

        $data['qteUnreadMessages'] = count($data['unreadMessages']);

        // Handle TaskModel safely
        try {
            $taskModel = model('TaskModel');
            $data['userTasks'] = $taskModel->where('responsible', $user_id)
                                           ->whereNotIn('status', [4,5])
                                           ->get()->getResultArray() ?: [];
        } catch (\Exception $e) {
            log_message('error', 'TaskModel error: ' . $e->getMessage());
            $data['userTasks'] = [];
        }

        $data['qteTasks'] = count($data['userTasks']);

        // Handle ExpenseModel safely
        try {
            $expenseModel = model('Finances/ExpenseModel');
            if (method_exists($expenseModel, 'countUnpaidExpenses')) {
                $data['qteUnpaidExpenses'] = $expenseModel->countUnpaidExpenses();
            } else {
                $data['qteUnpaidExpenses'] = 0;
            }
        } catch (\Exception $e) {
            log_message('error', 'ExpenseModel error: ' . $e->getMessage());
            $data['qteUnpaidExpenses'] = 0;
        }

        $data['notifications'] = $data['qteUnreadMessages'] + $data['qteTasks'] + $data['qteUnpaidExpenses'];
        return $data;
    }

    /**
     * Render a view file.
     *
     * Must be used in order to utilize the theme system.
     */
    protected function render(string $view, array $data = []): string
    {
        $data = array_merge($data, $this->navData); // Merges nav() data with view data
        return view($view, $data);
    }
}

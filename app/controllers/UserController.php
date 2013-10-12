<?php
class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id=1)
    {
        $user = User::find($id);

        return View::make('user.profile', array('user' => $user));
    }

}
?>
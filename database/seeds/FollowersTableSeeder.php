<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::all();
        $user  = $users->first();
        $user_id = $user->id;


        //获取取出掉id为1的所有用户id数据
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        //关注1号用户以外的所有用户
        $user->follow($follower_ids);

        //除了 1 号用户以外的所有用户都来关注 1 号用户
        foreach($followers as $follower){
            $follower->follow($user_id);
        }

    }
}

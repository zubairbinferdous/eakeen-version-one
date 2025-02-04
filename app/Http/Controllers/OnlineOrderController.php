<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;

class OnlineOrderController extends Controller
{
    public function confirm()
    {
        $data = Order::where('payment_type', 'online')->where('status', 'confirm')->get();
        return view('admin.confirm', compact('data'));
    }
    public function pending()
    {
        $data = Order::where('payment_type', 'online')->where('status', 'pending')->get();
        return view('admin.pending', compact('data'));
    }


    public function viewOnlineOrder($id)
    {
        $data = Order::find($id);
        return view('admin.viewOnlineOrder', compact('data'));
    }

    // public function confirmOnlineOrder($id)
    // {
    //     $data = Order::find($id);
    //     $data->status = 'confirm';
    //     $data->save();
    //     return redirect()->back()->with('success', 'Order confirmed successfully');
    // }
    
    public function pendingOnlineOrder($id)
    {
        $data = Order::find($id);
        $data->status = 'pending';
        $data->save();
        return redirect()->back()->with('success', 'Order pending successfully');
    }

    public function cancelOnlineOrder($id)
    {
        $data = Order::find($id);
        $data->status = 'cancel';
        $data->save();
        return redirect()->back()->with('success', 'Order canceled successfully');
    }

    public function confirmOnlineOrder($id)
    {
        $data = Order::find($id);
        $userId = $data->user_id;
        $data->status = 'confirm';
        $data->save();

        $user = User::find($userId);
        $commissionOne = $user->Referral;

        if ($commissionOne) {
            $userOne = User::where('Username', $commissionOne)->first();
            $userOne->affiliate_coin += 100;
            $userOne->save();

            if ($userOne->Referral) {
                $commissionTwo = $userOne->Referral;
                // dd($commissionTwo); 
                $userTwo = User::where('Username', $commissionTwo)->first();
                $userTwo->affiliate_coin += 50;
                $userTwo->save();

                if ($userTwo->Referral) {
                    $commissionThree = $userTwo->Referral;
                    $userThree = User::where('Username', $commissionThree)->first();
                    $userThree->affiliate_coin += 30;
                    $userThree->save();

                    if ($userThree->Referral) {
                        $commissionFour = $userThree->Referral;
                        $userFour = User::where('Username', $commissionFour)->first();
                        $userFour->affiliate_coin += 20;
                        $userFour->save();

                        if ($userFour->Referral) {
                            $commissionFive = $userFour->Referral;
                            $userFive = User::where('Username', $commissionFive)->first();
                            $userFive->affiliate_coin += 15;
                            $userFive->save();

                            if ($userFive->Referral) {
                                $commissionSix = $userFive->Referral;
                                $userSix = User::where('Username', $commissionSix)->first();
                                $userSix->affiliate_coin += 10;
                                $userSix->save();
                            }
                        }
                    }
                }
            }
        }

        return redirect()->back()->with('success', 'Order confirmed successfully');
    }



    // public function confirmOnlineOrder($id)
    // {
    //     $data = Order::find($id);
    //     if (!$data) {
    //         return redirect()->back()->with('error', 'Order not found');
    //     }

    //     $userId = $data->user_id;
    //     $data->status = 'confirm';
    //     $data->save();

    //     $user = User::find($userId);
    //     if (!$user) {
    //         return redirect()->back()->with('error', 'User not found');
    //     }

    //     $commissionOne = $user->Referral;
    //     if (!$commissionOne) {
    //         return redirect()->back()->with('success', 'Order confirmed successfully, but no referral bonus applied');
    //     }

    //     $userOne = User::where('Username', $commissionOne)->first();
    //     if (!$userOne) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userOne->affiliate_coin += 100;
    //     $userOne->save();

    //     if (!$userOne->referred_by) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userTwo = User::where('Username', $userOne->referred_by)->first();
    //     if (!$userTwo) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userTwo->affiliate_coin += 50;
    //     $userTwo->save();

    //     if (!$userTwo->referred_by) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userThree = User::where('Username', $userTwo->referred_by)->first();
    //     if (!$userThree) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userThree->affiliate_coin += 30;
    //     $userThree->save();

    //     if (!$userThree->referred_by) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userFour = User::where('Username', $userThree->referred_by)->first();
    //     if (!$userFour) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userFour->affiliate_coin += 20;
    //     $userFour->save();

    //     if (!$userFour->referred_by) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userFive = User::where('Username', $userFour->referred_by)->first();
    //     if (!$userFive) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userFive->affiliate_coin += 15;
    //     $userFive->save();

    //     if (!$userFive->referred_by) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userSix = User::where('Username', $userFive->referred_by)->first();
    //     if (!$userSix) return redirect()->back()->with('success', 'Order confirmed successfully');
    //     $userSix->affiliate_coin += 10;
    //     $userSix->save();

    //     return redirect()->back()->with('success', 'Order confirmed successfully');
    // }



    // public function confirmOnlineOrder($id)
    // {
    //     $data = Order::find($id);
    //     if (!$data) {
    //         return redirect()->back()->with('error', 'Order not found');
    //     }

    //     $userId = $data->user_id;
    //     $data->status = 'confirm';
    //     $data->save();

    //     $user = User::find($userId);
    //     if (!$user) {
    //         return redirect()->back()->with('error', 'User not found');
    //     }

    //     // Commission amounts for each referral level
    //     $commissionLevels = [100, 50, 30, 20, 15, 10];

    //     // Get first referrer
    //     $referrerUsername = $user->Referral;

    //     for ($i = 0; $i < count($commissionLevels); $i++) {
    //         if (!$referrerUsername) {
    //             break; // Stop if no referrer found
    //         }

    //         // Get referrer user
    //         $referrer = User::where('Username', $referrerUsername)->first();
    //         if (!$referrer) {
    //             break; // Stop if referrer user is not found
    //         }

    //         // Add affiliate commission
    //         $referrer->affiliate_coin += $commissionLevels[$i];
    //         $referrer->save();

    //         // Move to next referrer
    //         $referrerUsername = $referrer->referred_by;

    //         // Ensure next level can continue looping
    //         if (!$referrerUsername) {
    //             break; // Stop if no next referrer
    //         }
    //     }

    //     return redirect()->back()->with('success', 'Order confirmed successfully');
    // }




    // public function confirmOnlineOrder($id)
    // {
    //     $data = Order::find($id);
    //     $userId = $data->user_id;
    //     $data->status = 'confirm';
    //     $data->save();

    //     $user = User::find($userId);
    //     $commissionOne = $user->Referral;
    //     if ($commissionOne) {
    //         $userOne = User::where('Username', $commissionOne)->first();
    //         $userOne->affiliate_coin += 100;
    //         $userOne->save();

    //         if ($userOne->referred_by) {
    //             $commissionTwo = $userOne->referred_by;
    //             $userTwo = User::where('Username', $commissionTwo)->first();
    //             $userTwo->affiliate_coin += 50;
    //             $userTwo->save();

    //             if ($userTwo->referred_by) {
    //                 $commissionThree = $userTwo->referred_by;
    //                 $userThree = User::where('Username', $commissionThree)->first();
    //                 $userThree->affiliate_coin += 30;
    //                 $userThree->save();
    //             }
    //         }

    //     }

    //     return redirect()->back()->with('success', 'Order confirmed successfully');
    // }



    //     public function distributeCommission($orderId)
    //     {
    //         // Step 1: Fetch order and buyer
    //         $order = Order::findOrFail($orderId);
    //         $buyer = User::findOrFail($order->user_id);

    //         // Step 2: Define commission structure
    //         $commissionRates = [10, 5, 3, 2, 1]; // Percentages

    //         // Step 3: Fetch referral chain (up to 5 levels)
    //         $referrals = [];
    //         $currentReferrer = $buyer->referred_by;

    //         for ($i = 0; $i < 5 && $currentReferrer; $i++) {
    //             $referrer = User::where('affiliate_code', $currentReferrer)->first();
    //             if (!$referrer) break;
    //             $referrals[] = $referrer;
    //             $currentReferrer = $referrer->referred_by;
    //         }

    //         // Step 4: Distribute commission
    //         DB::beginTransaction();
    //         try {
    //             foreach ($referrals as $index => $referrer) {
    //                 $commissionAmount = ($order->total_amount * $commissionRates[$index]) / 100;

    //                 // Step 5: Store commission record
    //                 Commission::create([
    //                     'order_id' => $order->id,
    //                     'user_id' => $referrer->id,
    //                     'amount' => $commissionAmount
    //                 ]);

    //                 // Step 6: Update user wallet (Assuming a wallet system)
    //                 $referrer->wallet_balance += $commissionAmount;
    //                 $referrer->save();
    //             }
    //             DB::commit();
    //         } catch (\Exception $e) {
    //             DB::rollBack();
    //             return response()->json(['error' => 'Failed to distribute commission'], 500);
    //         }

    //         // Step 7: Return success response
    //         return response()->json(['message' => 'Commission distributed successfully']);
    //     }
}

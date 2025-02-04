<div class="checkout-sidebar">
    <div class="bg-color-three rounded-8 p-24 text-center">
        <span class="text-gray-900 text-xl fw-semibold">Your Coin</span>
    </div>

    <div class="border border-gray-100 rounded-8 px-24 py-40 mt-24">
        <div class="mb-32 pb-32 border-bottom border-gray-100 flex-between gap-8">
            <span class="text-gray-900 fw-medium text-xl font-heading-two">coin : </span>
            <span class="text-gray-900 fw-medium text-xl font-heading-two">{{ auth()->user()->coin }}</span>
        </div>

        <div class="mb-32 pb-32 border-bottom border-gray-100 flex-between gap-8">
            <span class="text-gray-900 fw-medium text-xl font-heading-two"> Affiliated coin :
            </span>
            <span class="text-gray-900 fw-medium text-xl font-heading-two">{{ auth()->user()->affiliate_coin }}</span>
        </div>

        <div class="mb-32 pb-32 border-bottom border-gray-100 flex-between gap-8">
            <span class="text-gray-900 fw-medium text-xl font-heading-two"> work place coin :
            </span>
            <span class="text-gray-900 fw-medium text-xl font-heading-two">{{ auth()->user()->work_coin }}</span>
        </div>
    </div>

</div>

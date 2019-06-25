Barba.Pjax.start();
let FadeTransition = Barba.BaseTransition.extend({
    start: function() {
     
        Promise
            .all([this.newContainerLoading, this.fadeOut()])
            .then(this.fadeIn.bind(this));
    },

    fadeOut: function() {
        this.oldContainer.classList.add("slide-out")
        let that = this

    },

    fadeIn: function() {
        this.newContainer.classList.add("slide-in")

        let that = this
        this.newContainer.addEventListener('animationend', function () {
            that.newContainer.classList.remove("slide-in")
            that.done()
        })
    }
});



Barba.Pjax.getTransition = function() {
    

    return FadeTransition;
};
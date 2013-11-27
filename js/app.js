/**
 * Created by JetBrains WebStorm.
 * User: bjorn
 * Date: 3/4/12
 * Time: 10:59 PM
 */

(function ($) {
    var works = [
        {title:"CTO/FRONEND DEVELOPER", author:"Vidamo Handels GmbH", releaseDate:"2012", keywords:"JavaScript Programming"},
        {title:"Frontend Developer", author:"Barketing IMS GmbH", releaseDate:"2012", keywords:"CoffeeScript Programming"},
        {title:"Founder and Developer", author:"Idee Digital Media", releaseDate:"2012", keywords:"Scala Programming"},
        {title:"Junior Web Developer", author:"Smaryeo", releaseDate:"2012", keywords:"Novel Slasher"},
      
    ];

    var Work = Backbone.Model.extend({
        defaults:{
           
            title:"No title",
            author:"Unknown",
            releaseDate:"Unknown",
            keywords:"None"
        }
    });

    var Experience = Backbone.Collection.extend({
        model:Work
    });

    var WorkView = Backbone.View.extend({
        tagName:"div",
        className:"workContainer",
        template:$("#workTemplate").html(),

        render:function () {
            var tmpl = _.template(this.template); //tmpl is a function that takes a JSON and returns html

            this.$el.html(tmpl(this.model.toJSON())); //this.el is what we defined in tagName. use $el to get access to jQuery html() function
            return this;
        },

        events: {
            "click .delete": "deleteWork"
        },

        deleteWork:function () {
            //Delete model
            this.model.destroy();

            //Delete view
            this.remove();
        }
    });

    var ExperienceView = Backbone.View.extend({
        el:$("#works"),

        initialize:function () {
            this.collection = new Experience(works);
            this.render();

            this.collection.on("add", this.renderWork, this);
            this.collection.on("remove", this.removeWork, this);
        },

        render:function () {
            var that = this;
            _.each(this.collection.models, function (item) {
                that.renderWork(item);
            });
        },

        events:{
            "click #add":"addWork"
        },

        addWork:function (e) {
            e.preventDefault();
          
            var formData = {};

            $("#addWork div").children("input").each(function (i, el) {
                if ($(el).val() !== "") {
                    formData[el.id] = $(el).val();
                }
            });

            works.push(formData);

            this.collection.add(new Work(formData));
        },

        removeWork: function(removedWork){
            var removedWorkData = removedWork.attributes;

            _.each(removedWorkData, function(val, key){
                if(removedWorkData[key] === removedWork.defaults[key]){
                    delete removedWorkData[key];
                }
            });

            _.each(works, function(work){
                if(_.isEqual(work, removedWorkData)){
                    works.splice(_.indexOf(works, work), 1);
                }
            });
        },

        renderWork:function (item) {
            var workView = new WorkView({
                model:item
            });
            
            $("#resume-list").prepend(workView.render().el);
        }
    });

    var experienceView = new ExperienceView();

    /*
     var work = new Work({
     title:"Some title",
     author:"John Doe",
     releaseDate:"2012",
     keywords:"JavaScript Programming"
     });

     workView = new WorkView({
     model: work
     });

     $("#books").html(bookView.render().el);
     */
})(jQuery);
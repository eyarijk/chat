<template>
<div class="chat-body" style="margin-top: 10px;">
    <div class="header">
        <strong> {{ user }} </strong>
         <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span> Нещодавно</small>
    </div>
    <div class="chatcolor" :class="chatcolor">
    	<slot></slot>
     </div>
</div>
</template>
<script>
	export default{
		props:['user','color'],

        computed:{
            chatcolor(){
            return'chatcolor-'+this.color;
            }
        }
	}
</script>
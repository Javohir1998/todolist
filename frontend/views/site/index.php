<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<div id="todoapp">

    <div class="title">
        <h1>Todos</h1>
    </div>

    <div class="content">

        <div id="create-todo">
            <input id="new-todo" placeholder="What needs to be done?" type="text" />
            <span class="ui-tooltip-top" style="display:none;">Press Enter to save this task</span>
        </div>

        <div id="todos">
            <input class="check mark-all-done" type="checkbox"/>
            <label for="check-all">Mark all as complete</label>
            <ul id="todo-list"></ul>
        </div>

        <div id="todo-stats"></div>

    </div>

</div>


<div id="credits">
    Created by
    <br />
    <a href="http://jgn.me/">J&eacute;r&ocirc;me Gravel-Niquet</a>.
    <br />Cleanup, edits: <a href="http://addyosmani.com">Addy Osmani</a>.
    <br />TypeScript version by <a href="http://blogs.msdn.com/lukeh">Luke Hoban</a>.
</div>


<script type="text/template" id="item-template">
    <div class="todo <%= done ? 'done' : '' %>">
        <div class="display">
            <input class="check" type="checkbox" <%= done ? 'checked="checked"' : '' %> />
            <label class="todo-content"><%= content %></label>
            <span class="todo-destroy"></span>
        </div>
        <div class="edit">
            <input class="todo-input" type="text" value="<%= content %>" />
        </div>
    </div>
</script>

<script type="text/template" id="stats-template">
    <% if (total) { %>
    <span class="todo-count">
          <span class="number"><%= remaining %></span>
          <span class="word"><%= remaining == 1 ? 'item' : 'items' %></span> left.
        </span>
    <% } %>
    <% if (done) { %>
    <span class="todo-clear">
          <a href="#">
            Clear <span class="number-done"><%= done %></span>
            completed <span class="word-done"><%= done == 1 ? 'item' : 'items' %></span>
          </a>
        </span>
    <% } %>
</script>




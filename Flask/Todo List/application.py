from flask import Flask, render_template, request, session 
from flask_session import Session 

app=Flask(__name__)

app.config["SESSION_PERMANENT"] = False
app.config["SESSION_TYPE"] = "filesystem"
Session(app)

todos=[]

@app.route("/", methods=["GET", "POST"])
def todo():
    #if session.get("notes") is None:
     #   session["notes"] = []
    if request.method == "POST":
        todo=request.form.get("todo")
        # session["todo"].append(todo)
        todos.append(todo)

    return render_template("todo.html", todos=todos)
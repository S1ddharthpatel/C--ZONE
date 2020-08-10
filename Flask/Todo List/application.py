from flask import Flask, render_template, request, session 
from flask_session import Session 

app=Flask(__name__)

app.config["SESSION_PERMANENT"] = False
app.config["SESSION_TYPE"] = "filesystem"
Session(app)


@app.route("/", methods=["GET", "POST"])
def todo():
    if session.get("todos") is None:
        session["todos"] = []
    if request.method == "POST":
        todo=request.form.get("todo")
        session["todos"].append(todo)

    return render_template("todo.html", todos=session["todos"])

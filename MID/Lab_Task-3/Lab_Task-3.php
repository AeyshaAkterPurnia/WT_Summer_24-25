<!DOCTYPE HTML>
<html>
    <head>
        <title>Java script Lab task</title>

    </head>

    <body>
        <script>
            console.log("VAriavles");
            var studentName = "Purnia";
            var StudentAge = 23;
            console.log("Name", studentName);
            console.log("age", StudentAge);

            console.log("\n Subject Marks");
            var marks = [81, 85,99,62,74];
            var subject = ["math", "english", "Web","TOC","RM"];

            for (var i =0; i<marks.lengtth; i++)
            {
                console.log(subjects[i]+": "+marks [i]);

            }
            console.log("\n Calculation");
            var total = 0;
            for (var i = ; i<marks.lengtth; i++)
            {
                total += marks[i];

            }
            var average = total/marks.length;
            console.log("Total Marks", total);
            console.log("Average Marks", average);

            console.log("\n condition");
            if(age>=18 && average>= 60 )
            {
                console.log(name+"is an adult and passed");
            }
            else
            {
                console.log(name+ "is fail");
            }

            console.log("\n Function");
            function StudentSummary()
            {
                var message ="Name: "+studentName +"\n";
                message +="Age " +StudentAge+"\n";
                message +="Average Marks " +Average+"\n";
                 return message;
            }
            function ShowResult()
            {
            
                alert(StudentSummary());
                console.log("result show in popup.");
            }
            

        </script>
       <br>
       <button onclick = "ShowResult()">Click Result</button>
    </body>
</html>

 

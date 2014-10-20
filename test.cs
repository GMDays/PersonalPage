using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.Windows.Forms;

public class myForm : Form
{
    public myForm(string title, string name)
    {

        myForm f1 = new myForm(title, name);
        f1.Text = title;

        Panel myPanel = new Panel();
        f1.Controls.Add(myPanel);
        myPanel.BackColor = System.Drawing.Color.Blue;
        myPanel.Height = 400;
        myPanel.Width = 300;
        myPanel.Dock = DockStyle.Bottom;

        Label myLabel = new Label();
        myPanel.Controls.Add(myLabel);
        myLabel.Text = name;

        Panel mySecondPanel = new Panel();
        mySecondPanel.BackColor = System.Drawing.Color.Red;
        mySecondPanel.Dock = DockStyle.Fill;

        Label mySecondLabel = new Label();
        mySecondPanel.Controls.Add(mySecondLabel);
        mySecondLabel.Text = "Comment : ";
        mySecondLabel.Top = 300;
        mySecondLabel.Left = 400;

        TextBox myTbox = new TextBox();
        myTbox.Left = 350;
        myTbox.Top = 250;
        myTbox.Anchor = AnchorStyles.Top | AnchorStyles.Right | AnchorStyles.Left;
        myTbox.Width = 200;

        Button myButton = new Button();

    }
    static int Main(String[] args)
    {
        myForm("My Form is Awesome", "Carlos Grijalva");
        Application.Run(myForm);
    }
}
    
import smtplib, ssl

port = 465 # For SSL
smtp_server = "smtp.gmail.com"
sender_email = "mary.j251298@gmail.com"
receiver_email = "njoku1009@gmail.com"
message = """\
Subject: Testing Python Email


This message is sent from Python.
"""
# Send email here

password = input("Type your password and press enter: ")

# Create a secure SSL context
context = ssl.create_default_context()

with smtplib.SMTP_SSL(smtp_server, port, context=context) as server:
    server.login(sender_email, password)
    server.sendmail(sender_email, receiver_email, message)
    # TODO: send email here
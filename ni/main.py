import discord
import os
import random
import asyncio
from discord.ext import commands
l=["HIV does not make people dangerous to know, so you can shake their hands and give them a hug. -princess diana","Knowing your HIV status is so important for your future health and that of your loved ones. -david greffen","HIV infection and AIDS is growing - but so too is public apathy. We have already lost too many friends and colleagues. -david geffen","The challenges surrounding HIV and AIDS are getting more complex and mature, and we just can't stick our heads in the sand and say \'it can't happen to me\'. -Brande","We can sharply deflect the curve of HIV incidence. -anthony Fauce"]

intents = discord.Intents.default()
intents.message_content = True

client = discord.Client(intents=intents)

@client.event
async def on_ready():
  print("we have logged in as {0.user}".format(client))

my_secret = str(os.environ['Token1'])

@client.event
async def on_message(message):
    if message.content.startswith('$input'):
        channel = message.channel
        await channel.send('which background color do u wish to see?')
        msg= await client.wait_for('message')
        f = open("c:\\color.txt", "w")
        f.write(msg.content)
        f.close()
    if message.content.startswith("$quote"):
        await message.channel.send(random.choice(l))
       
client.run(my_secret)
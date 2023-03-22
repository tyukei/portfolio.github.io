---
title: Intro of stable diffusion
category: 松ヶ崎祭
tags: 
created_at: '2022-11-02T01:16:35+09:00'
updated_at: '2022-11-02T01:16:35+09:00'
published: true
number: 64
---

# stable diffusion
## click here
https://huggingface.co/

## click sign up
<img width="1902" alt="image.png (116.6 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/098c0f28-3d51-4ac2-97c7-0d003dfe6a5a.png">

## input your information
<img width="516.75" alt="image.png (71.1 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/200fb71e-5aa2-4ef0-9217-91806a2d57b8.png">

## go to your mail
there is a link from huggin face
<img width="621" alt="image.png (35.4 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/43bcc5cc-ac9f-42d1-8947-39860fa58204.png">

## go to google colab
https://colab.research.google.com/github/huggingface/notebooks/blob/main/diffusers/stable_diffusion.ipynb

<img width="772.5" alt="image.png (64.0 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/f4a375db-7e06-4a99-a015-c48859ec04a9.png">

## run code by code

<img width="931" alt="image.png (37.4 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/2253d74c-4094-419e-8f1d-b9b011b3a4dd.png">

## enter ok
<img width="591" alt="image.png (16.2 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/266ec679-433e-434e-b566-7cee1c51fc35.png">

## after run in 6 and clikc there
https://huggingface.co/login?next=%2Fsettings%2Ftokens
<img width="1056" alt="image.png (34.6 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/f3830647-b172-4dc4-8454-7cb9567b4961.png">

## clikc new token
<img width="653.25" alt="image.png (85.3 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/4f34dfa3-0b15-4c95-bd0c-5ec2d316733f.png">


## input name and change role of write

<img width="588" alt="image.png (32.5 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/b71ceeb9-d523-4414-94ad-d7917fc0873c.png">

## copy the token

<img width="802" alt="image.png (23.4 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/2ceb0596-2cd4-4b10-9388-9abd8c09aa1b.png">

## copy and paste token and clikc login
<img width="733.5" alt="image.png (20.5 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/01/88504/fb534052-685b-4be6-99b2-b3200aea8ed8.png">

## if you find this error
```
requests.exceptions.HTTPError: 401 Client Error: Unauthorized for url: 
https://huggingface.co/CompVis/stable-diffusion-v1-4/resolve/main/tokenizer/vocab.json
```
click  https://huggingface.co/CompVis/stable-diffusion-v1-4/resolve/main/tokenizer/vocab.json
and copy and paste the url in json
you add permission of token then you can solve this problem

## change prompt
<img width="825" alt="image.png (312.3 kB)" src="https://img.esa.io/uploads/production/attachments/15481/2022/11/02/88504/d4cbec7f-8ebe-4683-89a2-f97ac6bda9fb.png">

```
prompt = "a photograph of an astronaut riding a horse"
image = pipe(prompt).images[0]  # image here is in [PIL format](https://pillow.readthedocs.io/en/stable/)

# Now to display an image you can do either save it such as:
image.save(f"astronaut_rides_horse.png")

# or if you're in a google colab you can directly display it with 
image
```


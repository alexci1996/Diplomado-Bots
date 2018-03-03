using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using Microsoft.Bot.Builder.Dialogs;
using Microsoft.Bot.Connector;
using System.Threading.Tasks;

namespace HelloBotsReal.Dialogs
{
    [Serializable]
    public class MyDialog:IDialog<string>
    {
        public async Task StartAsync(IDialogContext context)
        {
            context.Wait(MessageReceivedAsync);
        }
        private async Task MessageReceivedAsync(IDialogContext context, IAwaitable<object> result)
        {
            var ActivityMessage = await result as Activity;
            var Message = ActivityMessage.Text;
            await context.PostAsync($"Escribiste: {Message}");
            context.Wait(MessageReceivedAsync);
        }
    }
}